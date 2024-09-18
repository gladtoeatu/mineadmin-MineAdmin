<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace App\Async\Job\Vo;

/**
 * 队列消息内容对象
 * Class QueueMessageVo.
 */
class QueueMessageVo
{
    /**
     * 消息标题.
     */
    protected string $title;

    /**
     * 消息类型.
     */
    protected string $contentType;

    /**
     * 消息内容.
     */
    protected string $content;

    /**
     * 发送人.
     */
    protected int $sendBy;

    /**
     * 备注.
     */
    protected string $remark;

    /**
     * 是否需要确认.
     */
    protected bool $isConfirm = false;

    /**
     * 队列超时时间.
     */
    protected int $timeout = 5;

    /**
     * 队列延迟生产时间秒.
     */
    protected int $delayTime = 0;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function setContentType(string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getSendBy(): int
    {
        return $this->sendBy;
    }

    public function setSendBy(int $sendBy): self
    {
        $this->sendBy = $sendBy;
        return $this;
    }

    public function getRemark(): string
    {
        return $this->remark;
    }

    public function setRemark(string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    public function getIsConfirm(): bool
    {
        return $this->isConfirm;
    }

    public function setIsConfirm(bool $isConfirm): self
    {
        $this->isConfirm = $isConfirm;
        return $this;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getDelayTime(): int
    {
        return $this->delayTime;
    }

    public function setDelayTime(int $delayTime): self
    {
        $this->delayTime = $delayTime;
        return $this;
    }
}
